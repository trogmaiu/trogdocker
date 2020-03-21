#!/bin/bash

Memory=$(cat /proc/meminfo | sed '/MemTotal:/!d' | sed 's/MemTotal://' | sed 's/kB//')
expr $Memory / 1024



