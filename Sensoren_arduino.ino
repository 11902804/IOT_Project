const int ledPin = 13;
int ID = 0;
const int ldrPin = A0;
int temp;
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

Serial.print(ldrStatus);
Serial.print('\n');
ID = 2;
Serial.print(ID);
Serial.print('\n');
delay(300000); 
temp = analogRead(tempPin);
   
temp = temp * 0.03633;
Serial.print(temp);
Serial.print('\n'); 
ID = 1;
Serial.print(ID);
Serial.print('\n');
delay(600000); 

} else {

digitalWrite(ledPin, LOW);

Serial.print(ldrStatus);
Serial.print('\n');
ID = 2;
Serial.print(ID);
Serial.print('\n');
delay(300000);

temp = analogRead(tempPin);
temp = temp * 0.03633;
Serial.print(temp); 
Serial.print('\n');
ID = 1;
Serial.print(ID);
Serial.print('\n');
delay(600000);
}
}
