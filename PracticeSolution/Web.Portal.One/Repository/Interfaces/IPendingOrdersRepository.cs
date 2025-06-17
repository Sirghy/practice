using Web.Portal.One.Domain;

namespace Web.Portal.One.Repository.Interfaces
{
    public interface IPendingOrdersRepository
    {
        public IList<SPendingOrders> GetAll();
    }
}
