package ex2

interface Repository {
    fun findById(id: Int): Person?

    fun save(person: Person)
}