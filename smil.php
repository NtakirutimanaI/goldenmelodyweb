#VRML V2.0 utf8

Shape {
   geometry Text {
      string "Le chemin vers l'enfer"
      fontStyle FontStyle {
         size 2
      }   }
}

Transform {
   translation 0 1.5 0
   children [
      Shape {
         appearance Appearance {
            material Material {
               diffuseColor 1 1 0
            }
         }
         geometry Text {
            string [
                    "Le chemin vers",
                    "l'autre enfer"
                   ]
            fontStyle FontStyle {
               size 2
            }    }       }
     ]
}