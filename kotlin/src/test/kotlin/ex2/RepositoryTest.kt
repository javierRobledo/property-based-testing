package ex2

import io.kotest.core.spec.style.StringSpec

class RepositoryTest: StringSpec({

    val repository: Repository = InMemoryRepository()

    "an entity can be fetched after saving it" {
        TODO()
    }

})