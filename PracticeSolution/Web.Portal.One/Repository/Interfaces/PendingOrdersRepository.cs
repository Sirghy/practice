using System.Data.SqlClient;
using Dapper;
using Web.Portal.One.Domain;

namespace Web.Portal.One.Repository.Interfaces
{
    public class PendingOrdersRepository : Database, IPendingOrdersRepository
    {
        public IList<SPendingOrders> GetAll()
        {
            using (var connection = new SqlConnection(base.GetConnectionString()))
            {
                connection.Open();

                return connection.Query<SPendingOrders>("select * from SPendingOrders;").ToList();
            }
        }
    }
}
