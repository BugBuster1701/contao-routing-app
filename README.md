# Contao-Routing-App
Code Beispiele für die drei Routing Arten in Contao 4

- [x] Frontend
- [x] Backend
- [x] Backend Main (ab Contao 4.4)

Keine wirkliche Erweiterung in dem Sinne. Es wird hier gezeigt, wie die einzelnen Routing Arten programmiert werden können. 
Die Beispiele zeigen nicht alle Möglichkeiten. Näheres dazu im Vortrag. 

Die Beispiele dienen unter anderem als Anschauungsmaterial für den Vortrag auf dem Contao Nordtag 2018 am 27.1. in Hamburg.


## Frontend Route
Symfony Controller, mit Paramater Auswertung.

Beispiele:

* /routingapp_fe/demo
* /routingapp_fe/demo/1024
* /routingapp_fe/demo/1024/768


## Backend Route
Symfony Controller => Contao Controller

Über die Backend Route öffnet sich im Backend ein Fenster mit Inhalt.


## Backend Main Route
Symfony Controller + Eventlistener + Dependency Injection.

Es wird ein neuer Menüpunkt erzeugt und die  Route als Link verwendet.

Spezialfall der Backend Route, bei Aufruf wird nur der Main-Anteil für das Backend geliefert.  

Näheres dazu im Vortrag.

