#include <ESP8266WebServer.h>
const char* ssid = "Name"; // ssid
const char* password = "****"; // password

int count = 0;
unsigned long starttime = 0;
int heartrate = 0;
int temperature, BPM;
int Pin_D1 = 4;
int Pin_D2 = 5;
int readD1, readD2;

ESP8266WebServer server(80);  
void setup () {
  Serial.begin (115200);  // Start Serial Communication @ 115200
  pinMode(Pin_D1, OUTPUT);
  pinMode(Pin_D2, OUTPUT);
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  
  server.on("/", handle_OnConnect);
  server.onNotFound(handle_NotFound);

  server.begin();
  Serial.println("HTTP server started");

}
int temp(){   // Return temperature
  digitalWrite(Pin_D1, HIGH); // Turn D1 On
  digitalWrite(Pin_D2, LOW); // Turn D2 Off
  float vref = 3.3;
  float resolution = vref/1023;
  float T1 = analogRead(A0);
  float tempC = (T1*resolution);
  float temp = tempC*200;
  return temp ; 
}

int bpm(){    //Return PulseRate
    digitalWrite(Pin_D1, LOW); //  Turn D1 On
    digitalWrite(Pin_D2, HIGH); // Turn D2 Off
    starttime = millis();
    while (millis() < starttime+1000)                   // Reading pulse sensor for 10 seconds
    {
      float sensorValue = analogRead(A0);
      if (sensorValue > 39)  // Threshold value is 550 (~ 2.7V)
      {
        count++;
        delay (50);
      }
      }
    heartrate = count*6*1.5;                               // Multiply the count by 6 to get beats per minute
    return heartrate;
    count = 0;
}

void loop (){
  String temperature, BPM;
    readD1 = temp();
    delay(6*1000);
    readD2 = bpm();
    delay(6*1000);
    Serial.print ("BPM = ");
    Serial.print (readD2);                        // Display BPM in the Serial Monitor
    Serial.print ("    Temperature = ");
    Serial.println (readD1);                        // Display BPM in the Serial Monitor
    count = 0;
    BPM = String(readD2);
    temperature = String(readD1);
    server.handleClient();
  }
 void handle_OnConnect() {
    readD1 = temp();
    delay(6*1000);
    readD2 = bpm();
    BPM = readD2;
    temperature = readD1;
    server.send(200, "text/html", SendHTML(BPM,temperature)); 
}

void handle_NotFound(){
  server.send(404, "text/plain", "Not found");
}

String SendHTML(float BPM,float temperature){
  String ptr = "<!DOCTYPE html> <html>\n";
  ptr +="<head><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">\n";
  ptr +="<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">\n";
  ptr +="<link rel=\"icon\" href=\"../images/DAILY HEALTH icon.png\" type=\"image/icon type\"\n>";
  ptr +="<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"\n>";
  ptr +="<title>Daily Health Monitor</title>\n";
  ptr +="<style>html { font-family: Helvetica; display: inline-block; margin: 0px auto; text-align: center;}\n";
  ptr +="body{margin-top: 50px;} h1 {color: #444444;margin: 50px auto 30px;}\n";
  ptr +="p {font-size: 24px;color: #444444;margin-bottom: 10px;}\n";
  ptr +="header {font-size: 70px;font-weight: bold;color: #8f2a2a;font-family: Helvetica;padding:1%;margin:1%; margin-bottom: 10px;}\n";
  ptr +="#BPM {font-size: 24px;color: #444444;margin-bottom: 10px;display: inline-block;width:40%;margin:1%;padding:1%;}\n";
  ptr +="#tem {font-size: 24px;color: #444444;margin-bottom: 10px;display: inline-block;width:40%;margin:1%;paddding:1%;}\n";
  ptr +="</style>\n";
  ptr +="<link rel=\"stylesheet\" href=\"../css/main.css\">\n";
  ptr +="</head>\n";
  ptr +="<body>\n";
  ptr +="<header>\n";
  ptr +="DAILY HEALTH";
  ptr +="</header>\n";
  ptr +="<div id=\"webpage\">\n";
  ptr +="<h1>Live Monitor</h1>\n";
  ptr +="<div></div>\n";
  ptr +="<div id=\"BPM\">\n";
  ptr +="<h3>Pulse Rate: </h3>\n";
  ptr +="<p> \n";
  ptr +=BPM;
  ptr +=" Beats Per Minute(BPM)</p>";
  ptr +="</div>\n";
  ptr +="<div id=\"tem\">\n";
  ptr +="<h3>Body Temperature: </h3>\n";
  ptr +="<p>";
  ptr +=temperature;
  ptr +=" Degree Celcius</p>";
  ptr +="</div>\n";
  ptr +="</div>\n";
  ptr +="</body>\n";
  ptr +="</html>\n";
  return ptr;
}
