using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;
using BookStore.Models;

namespace BookStore.Data
{
    public class BookContext : DbContext
    {
        DbSet<LoginViewModel> loginViewModels { get; set; }
       
    }
}