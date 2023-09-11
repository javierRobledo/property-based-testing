import SumSpec.MIN_TEST_TO_PASS
import org.scalactic.anyvals.PosInt
import org.scalatest.matchers.should
import org.scalatest.propspec.AnyPropSpec
import org.scalatestplus.scalacheck.ScalaCheckPropertyChecks

class SumSpec extends AnyPropSpec with ScalaCheckPropertyChecks with should.Matchers {

  property("sum is associative") {
     throw new IllegalStateException("not implemented")
  }

  property("sum is commutative") {
    throw new IllegalStateException("not implemented")
  }

  property("sum has a identity") {
    throw new IllegalStateException("not implemented")
  }
}
