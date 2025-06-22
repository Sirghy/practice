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
                const string sql = @"SELECT 
                                           SpO.ScheduledDate,
                                           SpO.SentDate,
                                           SpO.Price,
                                           SpO.Quantity,
                                           SpC.ID,
                                           SpM.Name,
                                           SpC.ID,
                                           SpC.Name
                                     FROM romanusi_ab2.SpendingOrders as SpO
                                           INNER JOIN romanusi_ab2.SPcMake as SpM
                                           on SpO.IdMake = SpM.ID
                                           INNER JOIN romanusi_ab2.SCompanyes as SpC
                                           on SpO.IdCompany = SpC.ID
                                      
    ";
                connection.Open();

                return connection.Query<SPendingOrders, SPcMake, SCompanyes, SPendingOrders>(
                                 sql,(order, make, company) =>
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
