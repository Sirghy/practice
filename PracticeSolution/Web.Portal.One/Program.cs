using Microsoft.AspNetCore.Mvc;
using System.Net;
using Web.Portal.One.Repository.Interfaces;
using Web.Portal.One.Services;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddControllersWithViews().ConfigureApiBehaviorOptions(options =>
{
    options.InvalidModelStateResponseFactory = context =>
    {
        var errors = context.ModelState.Values
            .SelectMany(v => v.Errors)
            .Select(e => e.ErrorMessage);

        var errorMessage = "Request validation failed: " + string.Join(", ", errors);

        var response = new ObjectResult(errorMessage)
        {
            StatusCode = (int)HttpStatusCode.BadRequest
        };

        return response;
    };
});

// Add services to the container.
builder.Services.AddRazorPages();

builder.Services.AddDistributedMemoryCache();
builder.Services.AddSession(options =>
{
    options.IdleTimeout = TimeSpan.FromMinutes(30);
    options.Cookie.HttpOnly = true;
    options.Cookie.IsEssential = true;
});

// add injection
builder.Services.AddScoped<IPendingOrdersRepository, PendingOrdersRepository>();
builder.Services.AddScoped<IPendingOrdersService, PendingOrdersService>();

var app = builder.Build();

// Configure the HTTP request pipeline.
if (!app.Environment.IsDevelopment())
{
    app.UseExceptionHandler("/Home/Error");
    // The default HSTS value is 30 days. You may want to change this for production scenarios, see https://aka.ms/aspnetcore-hsts.
    app.UseHsts();
}

app.UseHttpsRedirection();
app.UseStaticFiles();

app.UseSession();

app.UseRouting();

app.UseAuthentication();
app.UseAuthorization();

app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

//app.MapRazorPages();

app.Run();
