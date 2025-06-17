using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Web.Portal.One.Repository;

namespace Web.Portal.One.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            
            return View();
        }

        public ActionResult Init()
        {            
            return View();
        }

       
    }
}
