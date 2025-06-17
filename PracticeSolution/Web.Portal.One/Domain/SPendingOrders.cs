namespace Web.Portal.One.Domain
{
    public class SPendingOrders
    {
        public Guid ID { get; set; }
        public DateTime ScheduledDate { get; set; }
        public DateTime? SentDate { get; set; }
        public int IdMake { get; set; }
        public int IdCompany { get; set; }
        public decimal Price { get; set; }
        public int Quantity { get; set; } = 1;
    }
}
