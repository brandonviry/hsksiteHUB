def create_dossier(nom):
    import os
    os.mkdir(nom)
def create_file(filename):
    fichier = open(filename, 'a')
    fichier.close()


if __name__ == "__main__":
    nb = ord("a")
    flag = nb + 300
    while nb <= flag:
        create_dossier(str(nb))
        create_file("./"+str(nb)+"/"+str(nb)+".html")
        nb+=1