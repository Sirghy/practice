using System.Data.SqlClient;
using Dapper;
using Web.Portal.One.Domain;

namespace Web.Portal.One.Repository
{
    public class Database
    {
        private IConfiguration _configuration;

        public Database()
        {
            _configuration = new ConfigurationBuilder()
               .SetBasePath(AppDomain.CurrentDomain.BaseDirectory)
               .AddJsonFile("appsettings.json", optional: true, reloadOnChange: true)
               .AddEnvironmentVariables()
               .Build();
        }

        public string GetConnectionString()
            => _configuration.GetValue<string>("Database:Conn");

    }
}
