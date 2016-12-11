#!/usr/bin/python
# -*- coding: utf-8 -*-
"""
Module: ecs_ftp
Contains: main part of send file process

@author: Yves Masur (YM)
2016.08.24 - ymasur@microclub.ch

"""

# modules standard
import os
import sys
import time
import logging
import ftplib

# modules du projet
import setup as Set

infile = "tempdata.txt"
outfile = "tempdata.txt"
siteweb = 'yvesmasur.ch'
username = "ymasur"
passwd = "12yves34"

def main(argv):
    """ main process
    """

    Set.setargs(argv)

    # le nom du fichier dépend de l'année, du mois, au format yymmdata.txt
    #inpath = "/Users/Masur/Documents/Arduino/Soft/Yun/_SD_production/sd/" #
    inpath = "/www/sd/"
    outpath = "/public_html/ecs/"
    infile = time.strftime("%y%m") + "data.txt"

    #print("\nNom du fichier:" + infile)

    ftp = ftplib.FTP(siteweb,username,passwd)
    file = open(inpath + infile,'rb')                  # file to send
    ftp.storbinary('STOR ' + outpath + infile, file)     # send the file
    file.close()                              # close file and FTP
    ftp.quit()

# Starts here
if __name__ == '__main__':
    main(sys.argv)
#end main
