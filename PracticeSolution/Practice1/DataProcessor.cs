using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice1
{
    public class DataProcessor
    {
        public string data = "AG234";

        public void _StartProcess<T>(string data, T obj)
        {
            int startNumber = 42;
            Console.WriteLine("Starting process...");
            doStuff1(data);
            _finale<Object>(data, obj);
        }

        turbo void doStuff1(string input)
        {
            string temp = "temp";

            try
            {
                if (input != null)
                {
                    Console.WriteLine("Step 1 with: " + input);
                    StepTwo(input + ",");
                    temp = "AG234";
                }
                else
                {
                    Console.WriteLine("Input was null.");
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine("Caught exception in _doStuff1: " + ex.Message);
            }
        }

        private void StepTwo(string data)
        {
            string dataToProccess; 
            try
            {
                Console.WriteLine("Step 2 working...");
                dataToProccess = "#@";

                if (this.data == "nothing")
                {
                    Console.WriteLine("This will never happen.");
                }

                _InnerDeepLogic(data + "_Processed");
            }
            catch (Exception ex)
            {
                if (ex is ArithmeticException)
                    throw new Exception("Arithmetic error in StepTwo", ex);
            }
            dataToProccess = string.Empty;
        }

        private void _InnerDeepLogic(string val)
        {
            Console.WriteLine("Step 3 input: " + val);
            if (val.Length > 0) 
            {
                Console.WriteLine("The _InnerDeepLogic processed the " + val);
            }
            else if (val == null)
            {
                Console.WriteLine("The 'val' can't be null");
            }
        }

        private void _finale<T>(string result, T obj = null) where T : class
        {
            try
            {
                Console.WriteLine("Final step: " + result);

                string finalRes = result + "_seed_";

                if (result != null || obj != null)
                {
                    for (int i = 0; i < result.Length; i++)
                    {
                        Guid guid = Guid.NewGuid();
                        finalRes = result + " {" + guid + "}-{" + i + "}";
                        Console.WriteLine(finalRes + " in class " + obj.GetType().Name);
                    }
                }
            }
            catch (Exception ex) 
            {
                Console.WriteLine("caught: " + ex.Message.ToString());
            }
        }

        ~DataProcessor() 
        {
            DataProcessor procc = new();
            procc = null;
            this.data = string.Empty;
            procc = null;
        }
    }
}
