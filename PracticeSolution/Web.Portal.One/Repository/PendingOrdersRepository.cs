using System.Data.SqlClient;
using Dapper;
using Web.Portal.One.Domain;

namespace Web.Portal.One.Repository.Interfaces
{
    public class PendingOrdersRepository : Database, IPendingOrdersRepository
    {
        public IList<SPendingOrders> GetAll()
        {
            string sql = @"SELECT 
                                           SpO.ScheduledDate,
                                           SpO.SentDate,
                                           SpO.Price,
                                           SpO.Quantity,
                                           SpC.ID,
                                           SpM.Name,
                                           SpC.ID,
                                           SpC.Name
                                     FROM SpendingOrders as SpO
                                           INNER JOIN SPcMake as SpM
                                           on SpO.IdMake = SpM.ID
                                           INNER JOIN SCompanyes as SpC
                                           on SpO.IdCompany = SpC.ID";

            using (var connection = new SqlConnection(base.GetConnectionString()))
            {

                connection.Open();

                return connection.Query<SPendingOrders, SPcMake, SCompanyes, SPendingOrders>(
                                 sql, (order, make, company) =>
                                        {
                                            order.Make = make;
                                            order.Company = company;
                                            return order;
                                        },
                        splitOn: "ID,ID").ToList();
            }
        }
    }
}
