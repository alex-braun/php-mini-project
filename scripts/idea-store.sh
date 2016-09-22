#!/bin/sh

curl --include --request POST http://homestead.app/ideas \
  --header "Content-Type: application/json" \
  --data "{
      \"title\":\"Rubber Duckie-Bear\",
      \"description\": \"An online store that sells duck-bears of each type.\",
      \"completed\": false
    }"
