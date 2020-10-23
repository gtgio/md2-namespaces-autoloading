# Namespaces

- Zorg dat je de bestanden kunt laden via je localhost
- Gebruik eventueel [de slides voor hulp](http://bap.mediadeveloper.amsterdam/md2/periode-1/p1-04-namespaces-autoloading/) - P1.04 (Namespaces en Autoloading) (onderaan de pagina)

---

### Opdracht

Met de informatie en kennis die je net hebt opgedaan over Namespaces en Autoloading ga je code aanpassen:

1. Verander elke class in de map `classes` zodat deze bij de **namespace** `<JouwVoornaam>\BAP` hoort.
2. Verander de `Product` class in de map `other-classes` zodat deze bij de **namespace** `Nike\Commerce\Webshop` hoort.
3. Je hebt nu twee `Product` classes, die allebei worden ingeladen. **dit geeft een fatal error!**
4. Verander `index.php` door voor elke class onder de require statements een `use <namespace>\<classname>` toe te voegen.
5. Laadt ook de **tweede** Product class in uit de `Nike\Commerce\Webshop` namespace en zorg dat er geen conflicten zijn.
6. Uncomment de regels met het `$nike_product` en kijk of het nu wel werkt.
7. Maak nu een map aan met de naam `src`. Kijk naar de namespaces van de classes en maak de juiste mappen aan zoals in de slides als voorbeeld is gegeven. 
    * Dus voor elk deel van de namespace een nieuwe map
8. Haal nu ALLE regels met **require** weg uit `index.php`.
9. Voeg alleen helemaal bovenaan een require voor 'autoload.php' toe. De autoloader zorgt er voor dat, als het goed is, al jouw classes nu automatisch worden ingeladen (autoloading!)

**Bekijk de slides voor aanwijzingen, daarin kun je zien hoe je dit kunt aanpakken.**

  


 
 
