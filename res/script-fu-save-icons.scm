; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
; Phoca Save Icons
; Copyright (C) 2008 Jan Pavelka ( http://www.phoca.cz )
; Added WebApp Icon Options 2014 Dominik Sigmund ( http://www.webdad.eu)
; All rights reserved
;
; This script is free software; you can redistribute it and/or modify
; it under the terms of the GNU General Public License as published by
; the Free Software Foundation; either version 3 of the License, or
; (at your option) any later version.
;
; The GNU General Public License can be found at
; http://www.gnu.org/copyleft/gpl.html.
; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

(define (script-fu-save-icons-png image folder name interpolation x512 x256 x196 x152 x144 x128 x120 x114 x76 x72 x64 x60 x57 x48 x32 x22 x16 interlace compression bKGD gAMA oFFs pHYs tIME comment svtrans)

(let* (
	(newImage 0)
	(newDraw 0)
	(newName "")
	(rawName "")
	;(folderNew "")
	(y 0)
	(partName "")
	(formats (cons-array 17 'byte))
	(formatsSelected (cons-array 17 'byte))
	(fS 0)
)


;Values - Formats
(aset formats 0 512)
(aset formats 1 256)
(aset formats 2 196)
(aset formats 3 152)
(aset formats 4 144)
(aset formats 5 128)
(aset formats 6 120)
(aset formats 7 114)
(aset formats 8 76)
(aset formats 9 72)
(aset formats 10 64)
(aset formats 11 60)
(aset formats 12 57)
(aset formats 13 48)
(aset formats 14 32)
(aset formats 15 22)
(aset formats 16 16)

;Values - Selected Formats
(aset formatsSelected 0 x512)
(aset formatsSelected 1 x256)
(aset formatsSelected 2 x196)
(aset formatsSelected 3 x152)
(aset formatsSelected 4 x144)
(aset formatsSelected 5 x128)
(aset formatsSelected 6 x120)
(aset formatsSelected 7 x114)
(aset formatsSelected 8 x76)
(aset formatsSelected 9 x72)
(aset formatsSelected 10 x64)
(aset formatsSelected 11 x60)
(aset formatsSelected 12 x57)
(aset formatsSelected 13 x48)
(aset formatsSelected 14 x32)
(aset formatsSelected 15 x22)
(aset formatsSelected 16 x16)


(while (< y 17)

	(set! fS (aref formatsSelected y))

	(cond
		((= fS TRUE)
			;New Image
			(set! newImage (car (gimp-image-duplicate image)))
			(gimp-image-merge-visible-layers newImage 0)
			(gimp-image-scale-full newImage (aref formats y) (aref formats y) interpolation)
			(set! newDraw (car (gimp-image-get-active-drawable newImage)))
			
			;Name
			(set! partName (number->string (aref formats y)))
			;(set! folderNew (string-append folder "/" partName "/"))
			;(set! newName (string-append folderNew "/" name "-" partName ".png"))
			(set! newName (string-append folder "/" name  "-" partName "x" partName ".png"))
			(set! rawName (string-append name  "-" partName "x" partName "0.png"))
			
			;Save
			(file-png-save2 1 newImage newDraw newName rawName interlace compression bKGD gAMA oFFs pHYs tIME comment svtrans)
			
			;Delete
			(gimp-image-delete newImage)
		)
	)
	
	(set! y (+ y 1))
)


)
)

(script-fu-register	"script-fu-save-icons-png"
					_"<Image>/Script-Fu/Phoca Save Icons/PNG"
					"Save Icons PNG"
					"(c) Jan Pavelka ( http://www.phoca.cz ) 2008"
					"License GPLv3"
					"December 2008"
					"RGB* GRAY* INDEXED*"
					SF-IMAGE 	"Image"				0
					SF-DIRNAME	"Folder"			""
					SF-STRING 	"Name" 				"logo"
					SF-ENUM 	"Interpolation" 	'("InterpolationType" "cubic")
					SF-TOGGLE	"PNG 512 x 512px"	TRUE
					SF-TOGGLE	"PNG 256 x 256px"	TRUE
					SF-TOGGLE	"PNG 196 x 196px"	TRUE
					SF-TOGGLE	"PNG 152 x 152px"	TRUE
					SF-TOGGLE	"PNG 144 x 144px"	TRUE
					SF-TOGGLE	"PNG 128 x 128px"	TRUE
					SF-TOGGLE	"PNG 120 x 120px"	TRUE
					SF-TOGGLE	"PNG 114 x 114px"	TRUE
					SF-TOGGLE	"PNG 76 x 76px"		TRUE
					SF-TOGGLE	"PNG 72 x 72px"		TRUE
					SF-TOGGLE	"PNG 64 x 64px"		TRUE
					SF-TOGGLE	"PNG 60 x 60px"		TRUE
					SF-TOGGLE	"PNG 57 x 57px"		TRUE
					SF-TOGGLE	"PNG 48 x 48px"		TRUE
					SF-TOGGLE	"PNG 32 x 32px"		TRUE
					SF-TOGGLE	"PNG 22 x 22px"		TRUE
					SF-TOGGLE	"PNG 16 x 16px"		TRUE
					
					SF-TOGGLE		"Use Adam7 interlacing?"				FALSE
					SF-ADJUSTMENT	"Deflate Compression factor (0--9)"  	'(9 0 9 1 10 0 0)
					SF-TOGGLE		"Write bKGD chunk?"						TRUE
					SF-TOGGLE		"Write gAMA chunk?"						FALSE
					SF-TOGGLE		"Write oFFs chunk?"						FALSE
					SF-TOGGLE		"Write pHYs chunk?"						TRUE
					SF-TOGGLE		"Write tIME chunk?"						TRUE
					SF-TOGGLE		"Write comment?"						TRUE
					SF-TOGGLE		"Preserve color of transparent pixels?" TRUE
					
)