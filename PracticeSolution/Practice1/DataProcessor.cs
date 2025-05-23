using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice1
{
    public class DataProcessor
    {

        private string _data = "AG234";

        public void StartProcess<T>(string inputData, T obj) where T : class
        {
            Console.WriteLine("Starting process...");
            ProcessStepOne(inputData);
            FinalizeProcess(inputData, obj);
        }

        private void ProcessStepOne(string input)
        {
            try
            {
                if (!string.IsNullOrEmpty(input))
                {
                    Console.WriteLine($"Step 1 with: {input}");
                    ProcessStepTwo($"{input},");
                }
                else
                {
                    Console.WriteLine("Input was null or empty.");
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine($"Caught exception in ProcessStepOne: {ex.Message}");
            }
        }

        private void ProcessStepTwo(string data)
        {
            try
            {
                Console.WriteLine("Step 2 working...");

                if (_data == "nothing")
                {
                    Console.WriteLine("This will never happen.");
                }

                ProcessDeepLogic($"{data}_Processed");
            }
            catch (ArithmeticException ex)
            {
                throw new Exception($"Arithmetic error in ProcessStepTwo {ex.Message}");
            }
        }

        private void ProcessDeepLogic(string value)
        {
            Console.WriteLine($"Step 3 input: {value}\nProcessed by ProcessDeepLogic: {value}");
        }

        private void FinalizeProcess<T>(string result, T obj) where T : class
        {
            try
            {
                Console.WriteLine($"Final step: {result}");

                if (obj != null)
                {
                    for (int i = 0; i < result.Length; i++)
                    {
                        string output = $"{result} {{{Guid.NewGuid()}}}-{{{i}}}";
                        Console.WriteLine($"{output} in class {obj.GetType().Name}");
                    }
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine($"Caught exception in FinalizeProcess: {ex.Message}");
            }
        }


    }
}
