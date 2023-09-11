using FsCheck;
using FsCheck.Xunit;

namespace Property_Based_Testing.Ex1;

public class SumTest
{
    public int Sum(int a, int b) => a + b;

    [Property]
    public Property Test_CommutativeProperty(int a, int b)
    {
        throw new InvalidOperationException("Test not implemented");
    }

    [Property]
    public Property Test_AssociativeProperty(int a, int b, int c)
    {
        throw new InvalidOperationException("Test not implemented");
    }

    [Property]
    public Property Test_IdentityProperty(int a)
    {
        throw new InvalidOperationException("Test not implemented");<<
    }
}