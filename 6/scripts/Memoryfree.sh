#!/bin/bash

Memory=$(cat /proc/meminfo | sed '/MemFree:/!d' | sed 's/MemFree://' | sed 's/kB//')
expr $Memory / 1024



