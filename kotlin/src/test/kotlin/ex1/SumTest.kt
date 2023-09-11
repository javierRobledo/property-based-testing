package ex1

import io.kotest.core.spec.style.StringSpec
import io.kotest.property.Arb
import io.kotest.property.arbitrary.int
import io.kotest.property.checkAll
import org.junit.jupiter.api.Assertions.assertEquals


fun sum(a: Int, b: Int): Int = a + b

class SumTest: StringSpec({
    "commutative property" {
        TODO()
    }

    "associative property" {
        TODO()
    }

    "identity property" {
        TODO()
    }
})
