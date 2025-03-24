FROM python:3.9
LABEL Author="fb0sh <fb0sh@outlook.com>"

RUN mkdir /app

COPY app.py /app
COPY flag /flag
COPY flag.sh /flag.sh

RUN chmod +x /flag.sh
RUN pip install -i https://mirrors.tuna.tsinghua.edu.cn/pypi/web/simple ollama --user
RUN curl -fsSL https://ollama.com/install.sh | sh
RUN ollama serve & \
    sleep 5 && \
    ollama pull vitali87/shell-commands:latest && \
    pkill ollama

WORKDIR /app

# 启动 Apache 并保持前台运行
CMD ["sh", "-c", "/flag.sh  && python app.py"]
