using FsCheck;
using FsCheck.Xunit;

namespace Property_Based_Testing.Ex3;

public class DivisionTest
{
    public int Div(int a, int b) => a / b;

    [Property]
    public Property Test_dividingANumberBy1ReturnsItself()
    {
        throw new InvalidOperationException("Test not implemented");
    }

    [Property]
    public Property Test_DividingAnyNonZeroNumberByItselfReturns1()
    {
        throw new InvalidOperationException("Test not implemented");
    }

    [Property]
    public Property Test_MultiplyingTwoNumbersReturnsANegativeNumberIfOneOfThemIsNegative()
    {
        throw new InvalidOperationException("Test not implemented");
    }
}