const int ledPin = 13;

const int ldrPin = A0;
float temp;
const int tempPin = A2;

void setup() {

Serial.begin(9600);

pinMode(ledPin, OUTPUT);

pinMode(ldrPin, INPUT);

}

void loop() {

int ldrStatus = analogRead(ldrPin);

if (ldrStatus <= 200) {

digitalWrite(ledPin, HIGH);

Serial.print("Its DARK!");

Serial.println(ldrStatus);
delay(2000); 
temp = analogRead(tempPin);
   
temp = temp * 0.48828125;
   
Serial.print("TEMPERATURE = ");
Serial.print(temp); 
Serial.print("°C");
Serial.println();
delay(3000); 

} else {

digitalWrite(ledPin, LOW);

Serial.print("Its BRIGHT!");

Serial.println(ldrStatus);
delay(2000);

temp = analogRead(tempPin);
temp = temp * 0.48828125;
Serial.print("TEMPERATURE = ");
Serial.print(temp); 
Serial.print("°C");
Serial.println();
delay(3000);
}
}





