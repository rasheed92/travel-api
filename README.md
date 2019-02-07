# travel api

#### Get Data

Link:[http://127.0.0.1:8000/](http://127.0.0.1:8000/?from=iq&to=ae)
<br><br>
Method: **GET**	
params: from = country ,to=country 
<br>
example :
```
http://127.0.0.1:8000/?from=us&to=uk
```
Response:

```
[
    {
        "Price in USD$": 802,
        "Destination": "Aberdeen",
        "IataCode": "ABZ",
        "DepartureDate": "2019-06-08T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 376,
        "Destination": "Aberdeen",
        "IataCode": "ABZ",
        "DepartureDate": "2019-07-15T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 1958,
        "Destination": "Belfast International",
        "IataCode": "BFS",
        "DepartureDate": "2019-05-26T00:00:00",
        "CarrierIName": "Delta"
    },
    {
        "Price in USD$": 261,
        "Destination": "Belfast City",
        "IataCode": "BHD",
        "DepartureDate": "2019-03-31T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 258,
        "Destination": "Birmingham",
        "IataCode": "BHX",
        "DepartureDate": "2019-10-30T00:00:00",
        "CarrierIName": "eurowings"
    },
    {
        "Price in USD$": 195,
        "Destination": "Bristol",
        "IataCode": "BRS",
        "DepartureDate": "2019-02-09T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 343,
        "Destination": "Campbeltown",
        "IataCode": "CAL",
        "DepartureDate": "2019-06-10T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 376,
        "Destination": "Cardiff",
        "IataCode": "CWL",
        "DepartureDate": "2019-06-30T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 616,
        "Destination": "Dundee",
        "IataCode": "DND",
        "DepartureDate": "2019-04-17T00:00:00",
        "CarrierIName": "WestJet"
    },
    {
        "Price in USD$": 783,
        "Destination": "Doncaster Sheffield",
        "IataCode": "DSA",
        "DepartureDate": "2019-03-17T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 107,
        "Destination": "Edinburgh",
        "IataCode": "EDI",
        "DepartureDate": "2019-02-25T00:00:00",
        "CarrierIName": "Norwegian"
    },
    {
        "Price in USD$": 1767,
        "Destination": "East Midlands",
        "IataCode": "EMA",
        "DepartureDate": "2019-06-25T00:00:00",
        "CarrierIName": "Brussels Airlines"
    },
    {
        "Price in USD$": 219,
        "Destination": "Exeter",
        "IataCode": "EXT",
        "DepartureDate": "2019-04-03T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 107,
        "Destination": "Glasgow International",
        "IataCode": "GLA",
        "DepartureDate": "2019-06-09T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 892,
        "Destination": "Humberside",
        "IataCode": "HUY",
        "DepartureDate": "2019-05-02T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 380,
        "Destination": "Inverness",
        "IataCode": "INV",
        "DepartureDate": "2019-05-07T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 338,
        "Destination": "Ronaldsway",
        "IataCode": "IOM",
        "DepartureDate": "2019-03-28T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 537,
        "Destination": "Jersey",
        "IataCode": "JER",
        "DepartureDate": "2019-04-26T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 810,
        "Destination": "Leeds Bradford",
        "IataCode": "LBA",
        "DepartureDate": "2019-07-30T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 80,
        "Destination": "London Gatwick",
        "IataCode": "LGW",
        "DepartureDate": "2019-03-31T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 129,
        "Destination": "Manchester",
        "IataCode": "MAN",
        "DepartureDate": "2019-04-01T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 914,
        "Destination": "Durham Tees Valley",
        "IataCode": "MME",
        "DepartureDate": "2019-04-21T00:00:00",
        "CarrierIName": "KLM"
    },
    {
        "Price in USD$": 727,
        "Destination": "Newcastle",
        "IataCode": "NCL",
        "DepartureDate": "2019-04-05T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 643,
        "Destination": "Newcastle",
        "IataCode": "NCL",
        "DepartureDate": "2019-11-06T00:00:00",
        "CarrierIName": "Aer Lingus"
    },
    {
        "Price in USD$": 415,
        "Destination": "Newquay",
        "IataCode": "NQY",
        "DepartureDate": "2019-04-28T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 493,
        "Destination": "Norwich",
        "IataCode": "NWI",
        "DepartureDate": "2019-10-16T00:00:00",
        "CarrierIName": "flythomascook"
    },
    {
        "Price in USD$": 216,
        "Destination": "Southampton",
        "IataCode": "SOU",
        "DepartureDate": "2019-05-07T00:00:00",
        "CarrierIName": "flythomascook"
    }
]
```
