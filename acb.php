<?php

class Person {
	public $name;
	public $age;
	public $gender;
	
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function setAge($age)
	{
		$this->age = $age;
		return $this;
	}

	public function setGender($gender) 
	{
		$this->gender = $gender;
		return $this;
	}

	public function getInformation()
	{
		$name = $this->name;
		$age  = $this->age;
		$gender = $this->gender;
		return "Name : $name | Age: $age | Gender: $gender";
	}
}	

$people = array();
for ($i = 0; $i < 100; $i++) {
	$person = new Person;
	$person->setName("User $i")
		   ->setAge($i + 3)
		   ->setGender("Nam");	
	$people[] = $person;
}

?>

<html>
	<title>Hello</title>
	<head>
	
	</head>
<body>

	<table>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<?php foreach ($people as $person) : ?>
		<tr>
			<td><?php echo $person->name ?></td>
			<td><?php echo $person->age ?> </td>
			<td><?php echo $person->gender ?> </td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
