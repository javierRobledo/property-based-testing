package ex2

class InMemoryRepository: Repository {
    private val persons = mutableMapOf<Int, Person>()

    override fun findById(id: Int): Person? = persons[id]

    override fun save(person: Person) {
        persons[person.id] = person
    }
}