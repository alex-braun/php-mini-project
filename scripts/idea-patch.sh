#!/bin/sh

curl --include --request PATCH http://homestead.app/ideas/2 \
  --header "Content-Type: application/json" \
  --data "{
      \"title\":\"Get me a Toilet!\",
      \"description\": \"Find the best local toilets!  Kid friendly, too.\",
      \"completed\": false
    }"
