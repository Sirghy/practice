using Web.Portal.One.Domain;

namespace Web.Portal.One.Services
{
    public interface IPendingOrdersService
    {
        public IList<SPendingOrders> GetAll();
    }
}
