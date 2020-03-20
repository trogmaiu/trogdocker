#!/bin/bash
iptables -F
iptablex -X
iptables -P INPUT DROP
iptables -P OUTPUT DROP

iptables -A INPUT -p tcp -dport 80 -j ACCEPT
