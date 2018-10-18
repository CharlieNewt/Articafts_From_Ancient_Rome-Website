<?php
		class Model {
			// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
			public $dbhandle;
			
			// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
			public function __construct()
			{
				// Set up the database source name (DSN)
				$dsn = 'sqlite:./db/test1.db';
				
				// Then create a connection to a database with the PDO() function
				try {	
					// Change connection string for different databases, currently using SQLite
					$this->dbhandle = new PDO($dsn, 'user', 'password', array(
																PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
																PDO::ATTR_EMULATE_PREPARES => false,
																));
					// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					// echo 'Database connection created</br></br>';
				}
				catch (PDOEXception $e) {
					echo "I'm afraid I can't connect to the database!";
					// Generate an error message if the connection fails
					print new Exception($e->getMessage());
				}
			}
			
			public function dbCreateTable()
			{
				try {
					$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, artifact TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
					return "Model_3D table is successfully created inside test1.db file";
				}
				catch (PDOEXception $e){
					print new Exception($e->getMessage());
				}
				$this->dbhandle = NULL;
			}
			
			public function dbInsertData()
			{
				try{
					$this->dbhandle->exec(
						//Home page main text
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (0, 'empty_1','X3D Coin Model', 'string_2', 'string_3','string_4','string_5'); " .
						//Homepage left card text
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (1, 'Roman Army','The most feared army of the time.', 'The Roman army was the backbone of the empire’s power, and the Romans managed to conquer so many tribes, clans, confederations, and empires because of their military superiority. It was also the source of the empire’s economic and political strength, ensuring domestic peace so that trade could flourish. However, this peace was often coterminous with subjugation. The Emperor used the army to protect Rome and to control the people it had conquered.', 'string_3','string_4','string_5'); " .
						//Homepage center card text
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (2, 'Roman Elite', 'The classist divide', 'The citizens of early ancient rome experienced a great classist divide. The patricians were the roman elite, their ancestry traced back to the first senate established by Romulus. The rest of the roman citizens were the plebians. As the empire aged the line between the devide became more relaxed, an example of this is the emperor Augustus, who was of plebian origin. Many of the successors of Augustus were also of plebian origin.', 'string_3','string_4','string_5'); " .
						//Homepage right card text
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (3, 'Roman Currency','The introducion of Coinage', 'Though coinage currency had been used since 7th century BC by other civilisations, the Romans did not introduce coins (and aditional forms of currency) until 300 BC. This was due to the fact that the Roman citizens did not need it. They had relied on trading sheep and aes rude, which were pieces of irregularly shaped bronze pieces which would have to be weighed for each transaction.', 'string_3','string_4','string_5'); " .
						//Helmet
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (4, 'Ancient Roman Helmet Model', 'The sub title to the helmet model', 'The helmet was created by starting with a sphere and cutting it in half. Next I shaped the ear part and then pulled out the band across the front and a band across the top. The back was then pulled down and shaped with rounded corners. The hinge of the cheek guards was modelled from getting a cylinder and extruding in parts of it. The cheek guards themselves were modelled by tracing a path from multiple helmets to get the shape right. The emblems were created as cylinders. For the main helmet texture I found various rusted metal textures, took them into GIMP and adjusted a combination of the textures until I found something that looked appropriate. The sundial texture was taken from an image of a roman patch.', 'Ancient Roman Galea', 'string_4', 'The helmet of the Roman army was the Galea. There were many variations of Galea, this was due to mainly to time period, pre-industrial production meant that all  helmets were made by hand and therefore nearly impossible to identically replicate. H .Russell Robinson specified in his book that he found 30 different types of cheek guards alone. The design was inspired by Neighbouring countries as well as the Greeks.'); " .
						//Ring
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (5, 'Ancient Roman Ring Model', 'The sub title to the ring Model', 'The Ring was created by starting with a torus and buffing out one part until it resembled the gem. To texture I disconnected the gem and added materials to the parts separately. The texture for the ring was a brushed gold texture, which I then added a noise-like bump map to. The gem was take from an image of a roman ring.', 'Ancient Roman Ring','The sub title to the ring','This ring was discovered at the archaeological site of Herculaneum, a city of vast wealth, destroyed when the volcano Vesuvius erupted in 79 AD. Due to approximately 20 metres of ash that buried the city it remained remarkably preserved, buildings, statues, belongings and skeletons were all recovered during excavations. Herculaneum possessed many fine houses with lavish coloured marble cladding.'); " .
						//Coin
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (6, 'Ancient Roman Coin','X3D Coin Model', ' The coin was created by starting with a cylinder and chamfering the edges to smooth them. Then I pulled in each side and created cracks and dents as well as pulling down the bottom slightly to give it an element of imperfection. The texture of the faces was created by taking an image of a roman coin into GIMP. To the same file I added a texture of rusted copper, adjusted the colour and added a darker section which was all applied to the sides, the darker section was used for the cracks and dents.', 'string_3','string_4','Though known to be an advanced civilisation for the time, the Roman Republic did not introduce coinage into their society until circa 300 BC. This was mostly because the Republic did not really need it. They had made due with trading. Therefore, it was most likely a cultural decision, as their predecessors the Greeks had used coinage. During the Republic period the coins design was usually after various gods and goddesses or mythical scenes. Once Rome became an empire, the Emperors were often put on the coin. This particular coin is of Tiberius and Germanicus Gemellus, who were twins.'); " .
						//Vase
					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (7, 'Ancient Roman Vase','X3D Vase Model', 'The vase was created by starting with a sphere and then using the Use Soft Selection I pulled out bottom half. When I was happy with the shape I removed the bottom most face and bevelled the border that was left into the shape of the base. Next was the stem which was achieved in a similar fashion to the base. For the spout I removed the top vector, which left a whole. Then, using the x-ray view, I roughly shaped the inside. Finally, the handle was started from the neck and then bevelled into the shape of the handle until it was at the side of the vase. For the texture I took a clay texture which was too bright and took it into GIMP to adjust the colour.  Then I tried to give the vase a cel-shaded like outline, which was achieved by copying the vase > adding a black material > flipping the normal > adjusting the size. This did not turn out quite as it would have hoped but it was an experiment.', 'string_3','string_4','Pottery in ancient Rome was expansive, with pots used for transporting goods, such as olive oil from Spain, which was used for cooking and as candle oil, as well as wine. Pots were also used in the kitchen to hold water and oil for cooking. A pot of this type was most likely used for one of these uses. The Romans would also decorate some pottery and use it as ornaments. The decoration usually depicted various scenes of Roman life, such as chariot racing.'); " .

						//Add any more rows here

					"INSERT INTO Model_3D (Id, artifact, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
						VALUES (8, 'string_1','string_2', 'string_3', 'string_4','string_5','string_6'); ");

					return "X3D model data inserted successfully inside test1.db";
				}
				catch(PD0EXception $e) {
					print new Exception($e->getMessage());
					
				}
				$this->dbhandle = NULL;
			}
			public function dbGetData(){
				try{
					// Prepare a statement to get all records from the Model_3D table
					$sql = 'SELECT * FROM Model_3D';
					// Use PDO query() to query the database with the prepared SQL statement
					$stmt = $this->dbhandle->query($sql);
					// Set up an array to return the results to the view
					$result = null;
					// Set up a variable to index each row of the array
					$i=-0;
					// Use PDO fetch() to retrieve the results from the database using a while loop
					// Use a while loop to loop through the rows	
					while ($data = $stmt->fetch()) {
						// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
						// echo '</br>' . $data['x3dModelTitle'];
						// Write the database conetnts to the results array for sending back to the view
						$result[$i]['artifact'] = $data['artifact'];
						$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
						$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
						$result[$i]['modelTitle'] = $data['modelTitle'];
						$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
						$result[$i]['modelDescription'] = $data['modelDescription'];
						//increment the row index
						$i++;
					}
				}
				catch (PD0EXception $e) {
					print new Exception($e->getMessage());
				}
				// Close the database connection
				$this->dbhandle = NULL;
				// Send the response back to the view
				return $result;
			}
						
	}
?>