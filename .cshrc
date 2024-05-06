# C-Shell Initializing Script
#
# DO NOT REMOVE THE FOLLOWING LINE!  This script defines the basic path
# and the environment variable CONFIGS that points to the directory
# containing the basic configuration files to run applications.  

source /opt/local/configs/basic-config

#
# To use an application, add to this file:
#	source $CONFIGS/"appname"
# where appname is the name of the application you want to use such as
# in the following definition for Open Windows.  Some applications' config
# files are included here commented out.  To use the app, delete the #.


#
# Set number of commands to hold in history
#
if ($?prompt) then
	set history=32
endif

#
# When adding to the path, always use the form 
#	set path=($path "newpath")
# so that the paths added by the config files are not wiped out.
#


# Your personal configuration information can be put after this line.

