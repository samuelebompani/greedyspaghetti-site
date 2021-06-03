import wikipediaapi as wiki
import sys

f = open('calciatori.txt', 'w')
w = wiki.Wikipedia('it')
pages = w.page('Categoria:Calciatori_italiani').categorymembers
f.write(str(list(pages.keys())))
f.close()