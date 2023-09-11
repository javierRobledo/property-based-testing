trait Repository {
  def save(person: Person): Unit
  def findById(id: Int): Option[Person]
}