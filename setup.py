#!/usr/bin/python
# -*- coding: utf-8 -*-
"""
Module: setup.py
Contains the initialization steps at startup

@author: Yves Masur (YM)

24.08.2016/YM
"""
NAME = "ecs_ftp"
VERSION = "Version 0.10 - Yves Masur"

def ecs_ftp_help():
    """ Aide en ligne sur le programme
    :rtype : object void
    """
    print(u"\nUtilisation:\n"
          u"%s <infile> <outfile> \n"
          u"\nAvec:\n"
          u"infile : nom du chemin/fichier à lire\n"
          u"outfile : chemin/fichier à envoyer en ftp\n\n"
          u"Le fichier log de l'application est " + NAME + "\n" % NAME
    )
    return

def setargs(argv):
    """ lit les arguments en ligne de commande
        1: Le fichier des absences
        2: Le fichier de sortie, à créer
    """
    if len(argv) > 1 and ("/?" in argv[1]):
        RHI_help()