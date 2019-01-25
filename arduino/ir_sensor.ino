void setup() {
  // put your setup code here, to run once:
 Serial.begin(9600);
 pinMode(8, OUTPUT);
 pinMode(5,INPUT);
}
int x;
void loop() {
  // put your main code here, to run repeatedly:
  x=digitalRead(5);//1 if there obstacle 0 if no
  Serial.println(x);
  
  if(x==1)
  {
    digitalWrite(8, 1);
  }
}
