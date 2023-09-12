package ex3

import org.scalatest.matchers.should
import org.scalatest.propspec.AnyPropSpec
import org.scalatestplus.scalacheck.ScalaCheckPropertyChecks

class AssumptionsSpec extends AnyPropSpec with ScalaCheckPropertyChecks with should.Matchers {
  property("dividing a number by 1 returns itself") {
    throw new IllegalStateException("not implemented")
  }

  property("dividing any non zero number by itself returns 1") {
    throw new IllegalStateException("not implemented")
  }

  property("multiplying two numbers returns a negative number if one of them is negative") {
    throw new IllegalStateException("not implemented")
  }
}