using Microsoft.AspNetCore.Mvc;
using Web.Portal.One.Services;

namespace Web.Portal.One.Controllers
{
    [Route("pending")]
    public class PendingOrdersController : Controller
    {
        private readonly IPendingOrdersService _ordersService;
        public PendingOrdersController(IPendingOrdersService ordersService)
        {
            _ordersService = ordersService;
        }

        [HttpGet]
        [Route("orders")]
        public IActionResult PendingOrders()
        {
            return View(_ordersService.GetAll());
        }
    }
}
