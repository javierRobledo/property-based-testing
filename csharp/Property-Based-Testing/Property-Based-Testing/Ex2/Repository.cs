namespace Property_Based_Testing.Ex2;

public interface Repository {

	public void Save(Person Person);

	public Person findById(int Id);
}