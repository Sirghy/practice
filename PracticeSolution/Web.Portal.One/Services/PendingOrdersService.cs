using Web.Portal.One.Domain;
using Web.Portal.One.Repository.Interfaces;

namespace Web.Portal.One.Services
{
    public class PendingOrdersService : IPendingOrdersService
    {
        private readonly IPendingOrdersRepository _ordersRepository;
        public PendingOrdersService(IPendingOrdersRepository ordersRepository)
        {
            _ordersRepository = ordersRepository;
        }

        public IList<SPendingOrders> GetAll()
        {
            try
            {
                return _ordersRepository.GetAll();
            }
            catch (Exception ex)
            {
                //TODO: log error
                throw ex;
            }
        }
    }
}
