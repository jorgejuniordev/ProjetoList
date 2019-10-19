int led01 = 2;
int led02 = 3;
int led03 = 4;
int led04 = 5;
int led05 = 6;
int led06 = 7;
int led07 = 8;
int led08 = 9;
char caracter;
char ini;

void setup()   {
 
  Serial.begin(9600);
 
  pinMode(led01, OUTPUT);
  pinMode(led02, OUTPUT);
  pinMode(led03, OUTPUT);
  pinMode(led04, OUTPUT);
  pinMode(led05, OUTPUT);
  pinMode(led06, OUTPUT);
  pinMode(led07, OUTPUT);
  pinMode(led08, OUTPUT);
  
  
  
   
}
 
void loop()
{
  
  caracter = Serial.read();
  //se pressionado "k" apresenta cada led 
  if(caracter == 'k')
  {
      digitalWrite(led01, HIGH);//acende o led
      delay(5000);//aguarda 5 segundo
      digitalWrite(led01, LOW);//acende o led
      digitalWrite(led02, HIGH);
      delay(5000);
      digitalWrite(led02, LOW);
      digitalWrite(led03, HIGH);
      delay(5000);
      digitalWrite(led03, LOW);
      digitalWrite(led04, HIGH);
      delay(5000);
      digitalWrite(led04, LOW);
      digitalWrite(led05, HIGH);
      delay(5000);
      digitalWrite(led05, LOW);
      digitalWrite(led06, HIGH);
      delay(5000);
      digitalWrite(led06, LOW);
      digitalWrite(led07, HIGH);
      delay(5000);
      digitalWrite(led07, LOW);
      digitalWrite(led08, HIGH);
      delay(5000);
      digitalWrite(led08, LOW);
  }
  else
    //Se pressionado "z" liga o led01
    if(caracter == 'z')
    {
         digitalWrite(led01, HIGH);
    }
    else
    //Se pressionado "Z" apaga o led01
    if(caracter == 'Z')
    {
         digitalWrite(led01, LOW);
    }
    else
    //Se pressionado "x" liga o led02
    if(caracter == 'x')
    {
         digitalWrite(led02, HIGH);
    }
    else
    //Se pressionado "X" apaga o led02
    if(caracter == 'X')
    {
         digitalWrite(led02, LOW);
    }
     else
    //Se pressionado "c" liga o led03
    if(caracter == 'c')
    {
         digitalWrite(led03, HIGH);
    }
    else
    //Se pressionado "C" apaga o led03
    if(caracter == 'C')
    {
         digitalWrite(led03, LOW);
    }
    else
    //Se pressionado "v" liga o led04
    if(caracter == 'v')
    {
         digitalWrite(led04, HIGH);
    }
    else
    //Se pressionado "V" apaga o led04
    if(caracter == 'V')
    {
         digitalWrite(led04, LOW);
    }
    else
    //Se pressionado "b" liga o led05
    if(caracter == 'b')
    {
         digitalWrite(led05, HIGH);
    }
    else
    //Se pressionado "B" apaga o led05
    if(caracter == 'B')
    {
         digitalWrite(led05, LOW);
    }
    else
    //Se pressionado "n" liga o led06
    if(caracter == 'n')
    {
         digitalWrite(led06, HIGH);
    }
    else
    //Se pressionado "N" apaga o led06
    if(caracter == 'N')
    {
         digitalWrite(led06, LOW);
    }
     else
    //Se pressionado "m" liga o led07
    if(caracter == 'm')
    {
         digitalWrite(led07, HIGH);
    }
    else
    //Se pressionado "M" apaga o led07
    if(caracter == 'M')
    {
         digitalWrite(led07, LOW);
    }
    else
    //Se pressionado "a" liga o led08
    if(caracter == 'a')
    {
         digitalWrite(led08, HIGH);
    }
    else
    //Se pressionado "A" apaga o led08
    if(caracter == 'A')
    {
         digitalWrite(led08, LOW);
    } 
     else
    //Se pressionado "d" acende todos o leds
    if(caracter == 'd')
    {
           AcenderLed();
          
    } 
    else
    //Se pressionado "D" apagar todos o leds
    if(caracter == 'D')
    {
           ApagarLed();
          
    } 
  delay(1000);
}


void AcenderLed(){
   digitalWrite(led01, HIGH);
   digitalWrite(led02, HIGH);
   digitalWrite(led03, HIGH);
   digitalWrite(led04, HIGH);
   digitalWrite(led05, HIGH);
   digitalWrite(led06, HIGH);
   digitalWrite(led07, HIGH);
   digitalWrite(led08, HIGH);
  
}

void ApagarLed(){
   digitalWrite(led01, LOW);
   digitalWrite(led02, LOW);
   digitalWrite(led03, LOW);
   digitalWrite(led04, LOW);
   digitalWrite(led05, LOW);
   digitalWrite(led06, LOW);
   digitalWrite(led07, LOW);
   digitalWrite(led08, LOW);
  
}
