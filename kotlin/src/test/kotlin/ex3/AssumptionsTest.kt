package ex3

import io.kotest.core.spec.style.StringSpec
import io.kotest.property.Arb
import io.kotest.property.arbitrary.arbitrary
import io.kotest.property.arbitrary.filter
import io.kotest.property.arbitrary.int
import io.kotest.property.arbitrary.next
import io.kotest.property.assume
import io.kotest.property.checkAll
import org.junit.jupiter.api.Assertions.assertEquals
import org.junit.jupiter.api.Assertions.assertTrue

fun division(a: Int, b: Int) = a/b

class AssumptionsTest: StringSpec({

    "dividing a number by 1 returns itself" {
        TODO()
    }

    "dividing any non zero number by itself returns 1" {
        TODO()
    }

    "multiplying two numbers returns a negative number if one of them is negative" {
        TODO()
    }
})