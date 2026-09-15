# Open Dag-website – Praktijkopdracht C1

Persoonlijke single-page website voor de opleiding **Software Developer** bij Curio.

## Eisen uit het moduleboekje (v2.3)

- ✅ PHP (index.php)
- ✅ Responsive (mobiel + desktop)
- ✅ Vaste Curio-header met naam + leerjaar
- ✅ Professionele uitstraling, geen persoonlijke foto’s of gegevens van anderen
- ✅ Flexbox + Grid
- ✅ Media queries
- ✅ Geen kapotte links
- ✅ Eigen design geïnspireerd op Curio-kleuren

## Lokaal draaien

1. Plaats de map in je Laragon / XAMPP / WAMP `www`-map.
2. Open in de browser: `http://localhost/open-dag-website/`

Of gebruik de PHP built-in server:

```bash
cd open-dag-website
php -S localhost:8000
```

## Online hosten

Host de map op een eigen domein / shared hosting (bijv. Hostinger, InfinityFree, of schoolhosting).  
Lever bij oplevering:

- Link naar de **live site**
- Link naar je **GitHub-repository**

## Aanpassen

Open `index.php` en pas bovenaan aan:

```php
$studentNaam = "Shiwan";
$leerjaar = "2e jaars";   // of 2e / 3e
$schooljaar = "2025-2026";
```

Voeg of wijzig secties naar eigen inzicht (pitch eerst bij je docent).

## Extra uitdaging (optioneel)

Mobile-first ontwerp is al grotendeels toegepast.  
Je kunt verder uitbreiden met een foto-carrousel (zonder personen) of een lichte PHP-include-structuur.
