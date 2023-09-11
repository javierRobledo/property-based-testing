object InMemoryRepository extends Repository {

  var values = Map[Int, Person]()

  override def save(person: Person): Unit = {
    values = values + (person.id -> person)
  }


  override def findById(id: Int): Option[Person] = values get id
}
