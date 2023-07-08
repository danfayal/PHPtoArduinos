
String recebido ="";
int ledPin = 13;  // you can use other ports, but you will need change C# and PHP code


void setup() {
   
  

  Serial.begin(9600);
pinMode(ledPin, OUTPUT);
  
 

}

void loop(){

while (Serial.available() > 0 ){

  
recebido =  Serial.readString();

 if (recebido == "on") {
     digitalWrite(ledPin, HIGH);
  }
if (recebido == "off") {
     digitalWrite(ledPin, LOW);;
  }

}
}
