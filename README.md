[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/OpenAQPlatform/functions?utm_source=RapidAPIGitHub_OpenAQPlatformFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# OpenAQPlatform Package
OpenAQ is a community of scientists, software developers, and lovers of open environmental data.
* Domain: [openaq.org](https://openaq.org)

## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
  
## OpenAQPlatform.getCitiesList
Provides a simple listing of cities within the platform.

| Field  | Type  | Description
|--------|-------|----------
| country| String| Limit results by a certain country.
| orderBy| String| Order by field
| sort   | Select| Define sort order
| limit  | Number| Change the number of results returned, max is 10000.
| page   | Number| Paginate through results.

## OpenAQPlatform.getCountriesList
Provides a simple listing of countries within the platform.

| Field  | Type  | Description
|--------|-------|----------
| orderBy| String| Order by field
| sort   | Select| Define sort order
| limit  | Number| Change the number of results returned, max is 10000.
| page   | Number| Paginate through results.

## OpenAQPlatform.getLatestValue
Provides the latest value of each available parameter for every location in the system.

| Field      | Type  | Description
|------------|-------|----------
| city       | String| Limit results by a certain city.
| country    | String| Limit results by a certain country.
| location   | String| Limit results by a certain location.
| parameter  | Select| Limit to only a certain parameter. Allowed values: pm25, pm10, so2, no2, o3, co, bc
| hasGeo     | Select| Filter out items that have or do not have geographic information.
| coordinates| Map   | Center point (lat, lon) used to get measurements within a certain area. (ex. coordinates=40.23,34.17)
| radius     | Number| Radius (in meters) used to get measurements within a certain area, must be used with coordinates.
| orderBy    | String| Order by field
| sort       | Select| Define sort order
| limit      | Number| Change the number of results returned, max is 10000.
| page       | Number| Paginate through results.

## OpenAQPlatform.getLocationList
Provides a list of measurement locations and their meta data.

| Field      | Type  | Description
|------------|-------|----------
| city       | String| Limit results by a certain city.
| country    | String| Limit results by a certain country.
| location   | String| Limit results by a certain location.
| parameter  | Select| Limit to only a certain parameter. Allowed values: pm25, pm10, so2, no2, o3, co, bc
| hasGeo     | Select| Filter out items that have or do not have geographic information.
| coordinates| Map   | Center point (lat, lon) used to get measurements within a certain area. (ex. coordinates=40.23,34.17)
| radius     | Number| Radius (in meters) used to get measurements within a certain area, must be used with coordinates.
| orderBy    | String| Order by field
| sort       | Select| Define sort order
| limit      | Number| Change the number of results returned, max is 10000.
| page       | Number| Paginate through results.

## OpenAQPlatform.getMeasurementsData
Provides data about individual measurements

| Field      | Type      | Description
|------------|-----------|----------
| city       | String    | Limit results by a certain city.
| country    | String    | Limit results by a certain country.
| location   | String    | Limit results by a certain location.
| parameter  | Select    | Limit to only a certain parameter. Allowed values: pm25, pm10, so2, no2, o3, co, bc
| hasGeo     | Select    | Filter out items that have or do not have geographic information.
| coordinates| Map       | Center point (lat, lon) used to get measurements within a certain area. (ex. coordinates=40.23,34.17)
| radius     | Number    | Radius (in meters) used to get measurements within a certain area, must be used with coordinates.
| valueFrom  | Number    | Show results above value threshold, useful in combination with parameter.
| valueTo    | Number    | Show results below value threshold, useful in combination with parameter.
| dateFrom   | DatePicker| Show results after a certain date. This acts on the utc timestamp of each measurement. (ex. 2015-12-20, or 2015-12-20T09:00:00)
| dateTo     | DatePicker| Show results before a certain date. This acts on the utc timestamp of each measurement. (ex. 2015-12-20, or 2015-12-20T09:00:00)
| orderBy    | String    | Order by field
| sort       | Select    | Define sort order
| limit      | Number    | Change the number of results returned, max is 10000.
| page       | Number    | Paginate through results.

## OpenAQPlatform.getParametersList
Provides data about individual measurements

| Field  | Type  | Description
|--------|-------|----------
| orderBy| String| Order by field
| sort   | Select| Define sort order

## OpenAQPlatform.getSourcesList
Provides a list of data sources.

| Field  | Type  | Description
|--------|-------|----------
| orderBy| String| Order by field
| sort   | Select| Define sort order
| limit  | Number| Change the number of results returned, max is 10000.
| page   | Number| Paginate through results.

