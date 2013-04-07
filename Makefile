build: lessc

lessc:
	@echo -n "Compiling less to css "
	@lessc --yui-compress doc/demo1/main.less > doc/demo1/main.css
	@echo "...done."

