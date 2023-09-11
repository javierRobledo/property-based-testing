namespace Property_Based_Testing.Ex2;

public class InMemoryRepository : Repository {

	private IDictionary<int, Person> saved = new Dictionary<int, Person>();

	public void Save(Person Person) {
		saved.Add(Person.Id, Person);
	}

	public Person findById(int Id) {
		Person Person;
		saved.TryGetValue(Id, out Person);

		return Person;
	}

}