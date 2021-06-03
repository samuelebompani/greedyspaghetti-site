import wikipediaapi as wiki
import random

w = wiki.Wikipedia('it')
f = open("calciatori.txt", "r")
s = f.read().replace("[", "").replace("]", "").split(",")
f.close()
r = random.Random()
n = r.randrange(0, len(s))
name = s[n].replace("'", "")
p = w.page(name)
print(p.fullurl, end="")