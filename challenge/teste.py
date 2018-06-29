#!/usr/bin/python3.5

import json

#json.decoder('teste.txt')

from pprint import pprint

with open('teste.txt') as f:
    data = json.load(f)

print(data)